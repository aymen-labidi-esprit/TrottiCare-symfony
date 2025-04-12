// ...existing code...

public function up(Schema $schema): void
{
    // ...existing code...
    
    $this->addSql('ALTER TABLE maintenance ADD type VARCHAR(255) NOT NULL');
    
    // ...existing code...
}

public function down(Schema $schema): void
{
    // ...existing code...
    
    $this->addSql('ALTER TABLE maintenance DROP type');
    
    // ...existing code...
}
